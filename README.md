# YOWL : comment all the internet

Authors : Imad B, Mathieu C, Jean-Jackson M, Jun S.

## GENERAL :

- Decentralised comments on reposts from any website
- An incentivised active community

YOWL is a web application that will allow users to comment on all of the content found on the Internet. Each comment will be shared by the entire YOWL user community.

Our tool will make it possible to decentralize comments from social networks and to have a new vision of the web through participatory on sources (OSINT) or simply by adding a comment thus federating communities around websites.

### Content making :

- Share content from another website : you're an owl, we need your eyes !
- Comment on a post : you're a parrot, we need your voice !

## Main Features (user) :

- Create / edit / delete a profile
- Create / edit / delete a post
- Create / edit / delete a comment on a post
- Up-vote / Down-vote on a post
- Vote on a comment

## Main Features (admin) :

- CRUD users
- CRUD categories
- Delete posts
- Delete comments
- KPI dashboard

## Upcoming Features :

The website will ***incentivised content making*** through rewards :

- the ***owl*** who spots content and shares it with the comuunity* will be awarded badges depending on :

        1. total amount of posts (for e.g : 1 badge after 10 posts, another badge after 50 posts, etc)
        2. total amount of up-votes
        3. total amount of comments
        4. amount of up-votes on a single post
        5. amount of comments on a single post

The collection of badges will determine the status of a spotter : *Owl* -> *Super Owl*

- the ***parrot*** who shares his opinion with the community* will be awarded badges depending on : 

        1. total amount of comments
        2. total amount of up-votes on all comments
        3. total amount of up-votes on a single comment

The collection of badges will determine the user's status : *Parrot* -> *Super Parrot*

The user can accumulate both ***owl*** and ***parrot*** badges.

## TECH :

### Main Tools :

- Laravel 8
- Vue 2
- Vuex 3 / Vue Router / Eslint
- Axios

## INSTALLATION :

1. clone the repository :

        git clone git@github.com:EpitechIT2020/C-RDG-160-FR-1-1-yowl-jun.suzuki.git

2. install node dependencies :

        npm install

3. install composer dependencies

        composer install

4. create your .env file :
- rename .env.example to .env
- replace DB_USERNAME=root to DB_USERNAME=\<your-username\>
- replace DB_PASSWORD= to DB_PASSWORD=\<your-password\>

5. generate your key

        php artisan key:generate

