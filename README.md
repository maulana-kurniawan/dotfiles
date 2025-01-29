# dotfiles

## PHP CS Fixer

```bash
composer i --dev friendsofphp/php-cs-fixer
```

```json
"format": [
	"php-cs-fixer fix --config=.php-cs-fixer.php"
 ]
```

## Prettier

```bash
npm i --save-dev prettier @ianvs/prettier-plugin-sort-imports @shufo/prettier-plugin-blade
```

```json
"format": "prettier --write --ignore-path .prettierignore ."
```
