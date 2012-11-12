<?php

class Controller_User extends Controller_Template {

	public function action_login()
	{
		$val = Validation::forge( 'login' );
		$val->add_field( 'username', 'Username', 'required' );
		$val->add_field( 'password', 'Password', 'required' );

		$username = Input::post( 'username' );
		$password = Input::post( 'password' );

		if ($val->run())
		{
			$user = Model_User::find()->where( 'username', $username )
									  ->where( 'password', md5($password))
									  ->get_one();
			if ( $user )
			{
				Session::set( 'user', array(
					'id' => $user->id,

					// user data
					'username' => $user->username,
					'email' => $user->email,
					'phone' => $user->phone
				));

				Response::redirect( 'user/profile' );
			}

			else
			{
				$this->template->set_global( 'username', $val->validated( 'username' ));
				$this->template->set_global( 'error', '<ul><li>Invalid User</li></ul>', false );
			}


		}

		else
		{
			if (Input::method() == 'POST')
			{
				$this->template->set_global( 'username', $val->validated( 'username' ));
				$this->template->set_global( 'error', $val->show_errors(), false );
			}
		}

		$this->template->title = "User Login";
		$this->template->content = View::forge( 'user/login' );

	}

	public function action_register()
	{
		$val = Validation::forge( 'register' );
		$val->add_field( 'username', 'Username', 'required' );
		$val->add_field( 'password', 'Password', 'required' );
		$val->add_field( 'confirm_password', 'Password', 'required|match_field[password]' );
		$val->add_field( 'email', 'Email', 'required|valid_email' );
		$val->add_field( 'phone', 'Phone', 'required' );

		if ($val->run())
		{
			if (Model_User::find()->where( 'username', Input::post('username') )->get_one())
			{
				$this->template->set_global( 'error', '<ul><li>User already exists</li></ul>', false );
			}

			else
			{
				$user = Model_User::forge();
				$user->username = Input::post('username');
				$user->password = md5(Input::post('password'));
				$user->email = Input::post('email');
				$user->phone = Input::post('phone');

				if($user->save())
				{
					Session::set_flash( 'mesg', 'Successfully registered!' );
					Response::redirect( 'user/login' );
				}

				else
				{
					$this->template->set_global( 'error', '<ul><li>Database Error</li></ul>', false );		
				}

			}

			$this->template->set_global( 'username', Input::post( 'username' ));
			$this->template->set_global( 'email', Input::post( 'email' ));				

		}

		else
		{
			if (Input::method() == 'POST')
			{
				$this->template->set_global( 'error', $val->show_errors(), false );		
				$this->template->set_global( 'username', $val->validated( 'username' ));
				$this->template->set_global( 'email', $val->validated( 'email' ));
			}
		}

		$this->template->title = "User Register";
		$this->template->content = View::forge( 'user/register' );
	}
}