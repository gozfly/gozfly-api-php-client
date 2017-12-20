# How to run examples

First, [clone](https://help.github.com/articles/cloning-a-repository/) repository.

```bash
git clone https://www.github.com/gozfly/gozfly-api-php-client
```
Change dir to the repo 
```bash
cd gozfly-api-php-client
```

Install dependencies:

```bash
composer install [-d /path/to/repository/root]
```
If you don't have composer, you can get it [here](https://getcomposer.org/doc/00-intro.md).
Parameters in brackets are optional.

Create `.env` file with gozfly credentials in the parent catalog (in the repository root) like this

```ini
GOZFLY_CLIENT_ID=111ClientId111
GOZFLY_CLIENT_SECRET=222ClientSecret
```

The simplest way to do that to run the following commands:
```bash
echo 'GOZFLY_CLIENT_ID=111ClientId111' >> .env
echo 'GOZFLY_CLIENT_SECRET=222ClientSecret' >> .env
```

To get client and secret go to [Gozfly Developers portal](https://developer.gozfly.com/) and create new app there.

After add to OAuth 2.0 Authorized Redirect URLs:
```
http://localhost:8901/
```

Next, run PHP embedded server in the repository root:

```bash
php -S localhost:8901 -t examples
```

Navigate to http://localhost:8901/ 
