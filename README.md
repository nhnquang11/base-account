# base-account

1. Main features

- Sign up
- Log in
- Edit
- Log out
- Password Recovery (Captcha + Email Sender)
- Save login (remember me for the next 07 days)

2. Security vunerabilities handling: parameterized queries (SQL Injection), escape output & sanitize input (XSS), CSRF tokens (CSRF)

3. As the project hasn't been nicely refactored yet, here are some things to note:

- Set up a MySQL database following the file databases.db.
- Database configuration at $config variable in public/index.php.
- EmailSender needs setting up app password.
