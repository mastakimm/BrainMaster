init project :

run composer install

run npm install

make sure you using node version > 14 with node -v

run nvm install 20.11.1

your controller.json must look like this :

{
    "controllers": {
        "@symfony/ux-chartjs": {
            "chart": {
                "enabled": true,
                "fetch": "eager"
            }
        }
    },
    "entrypoints": []
}

then run npm run watch
symfony server:start

You're all set!
