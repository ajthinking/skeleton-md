# skeleton.md
Build Laravel apps from intuitive markdown

## Installation
```bash
composer install ajthinking/skeleton.md
```
PLACEHOLDER GIF
<img src="https://i.imgur.com/U9NnDix.gif" title="source: imgur.com" />

## Usage
```bash
php artisan skeleton:new
```
Adds a new file ```skeleton.md``` to place your object scheme in. Check out the syntax section for an example. When done, simply run
```bash
php artisan skeleton:build
```
This will build your migrations, models, controllers and setup the routes accordingly. It will also scaffold seeders with some dummy data.

## Syntax

```markdown
User          <--- Capital first letter indicates a Model
name          <--- Attribute
email
password

Car
user_id       <--- *_id indicates foreign key
registration
color

car_garage    <--- <model-1>_<model-2> indicates many to many relationship
```

## Data types
The package will attempt to guess datatypes based on simple rules and a statistics pack of roughly 100K fields from public repos. Below are some examples of input and default datatypes

| Input            | Data type                                              |
|:--------------------------- |:--------------------------------------------------- |
| `is_*`                        | `boolean`                                 |
| `has_*`                        | `boolean`                                 |
| `got_*`                        | `boolean`                                 |
| `*_at`                        | `datetime`                                 |
| `*_time*`                        | `datetime`                                 |
| `*_date`                        | `datetime`                                 |
| `*_count`                        | `integer`                                 |
| `*_name`                        | `text`                                 |
| `*_text`                        | `text`                                 |

## Thanks
Thank you for using this MIT-licensed repository. Support the creator at [andersjurisoo.com/skeleton/pay-what-you-want](https://www.andersjurisoo.com/skeleton/pay-what-you-want)
