# wp-env-heroku-amazon-aws

Use environment variables to define named constants, which are required by these two plugins:

- amazon-web-services
- wp-amazon-s3-and-cloudfront

Accepted env keys:

- AWS_ACCESS_KEY_ID (used by amazon-web-services plugin)
- AWS_SECRET_ACCESS_KEY (used by amazon-web-services plugin)
- AWS_BUCKET (used by wp-amazon-s3-and-cloudfront >= 1.0)
- AWS_OBJECT_PREFIX (used by wp-amazon-s3-and-cloudfront >= 1.0)

Both AWS_BUCKET and AWS_OBJECT_PREFIX are optional. The plugin will read the values from the database if they are not set throguh environment. In such case, values are set from the wp-amazon-s3-and-cloudfront plugin settings page.

