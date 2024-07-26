# Base Account

## Main Features

- **Sign Up**
- **Log In**
- **Edit**
- **Log Out**
- **Password Recovery**
  - Captcha
  - Email Sender
- **Save Login**
  - Remember me for the next 7 days

## Security Vulnerabilities Handling

- **Parameterized Queries** (SQL Injection)
- **Escape Output & Sanitize Input** (XSS)
- **CSRF Tokens** (CSRF)

## Notes

As the project hasn't been nicely refactored yet, here are some things to note:

- Set up a MySQL database following the file `databases.db`.
- Database configuration is set at the `$config` variable in `public/index.php`.
- EmailSender requires setting up an app password.
