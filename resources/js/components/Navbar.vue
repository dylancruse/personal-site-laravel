<template>
<div class="navbar__wrapper">
    <div id="navbar" class="navbar px-4">
        <div class="navbar__inner">
            <div class="flex half-width">
                    <a v-bind:href="homeRoute" class="home-link">
                        <i class="fas fa-cat fa-2x"></i>
                    </a>
            </div>
            <div class="flex justify-content-end half-width">
                <div class="nav-menu-button" v-on:click="toggleMenu()">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
    <div id="nav-menu" class="nav-menu">
        <div v-if="isLoggedIn" class="nav-menu__inner">
            <div class="nav-link__wrapper">
                <form :action="logoutRoute" method="post">
                    <input type="hidden" name="_token" :value="csrf">
                    <div v-on:click="logout()" class="nav-link text-md white">
                        <span>Logout 💥</span>
                        <!-- <button type="submit" class="nav-link__button ml-4">Logout</button> -->
                    </div>
                </form>
            </div>
        </div>
        <div v-else class="nav-menu__inner">
            <div class="nav-link__wrapper">
                <a :href="loginRoute" class="nav-link text-md white">
                    <span>Login 💻</span>
                    <!-- <button class="nav-link__button">Login</button> -->
                </a>
                <a :href="registerRoute" class="nav-link text-md white">
                    <span>Register 📝</span>
                    <!-- <button class="nav-link__button">Register</button> -->
                </a>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: 'navbar-component',
        data() {
            return {
                showMenu: false,
            };
        },
        computed: {
            csrf() {
                return document.querySelector('meta[name="csrf_token"]').getAttribute('content');
            }
        },
        methods: {
            toggleMenu() {
                if (this.showMenu) {
                    document.getElementById('nav-menu').classList.remove('nav-menu-slide-down');
                } else {
                    document.getElementById('nav-menu').classList.add('nav-menu-slide-down');
                }
                this.showMenu = !this.showMenu;
            },
            logout() {
                const url = document.querySelector('meta[name="base_url"]').getAttribute('content');
                axios.post(url + '/logout', { '_token': this.csrf }).then(response => {
                    if (response.status === 204) {
                        window.location = url;
                    }
                }).catch(error => {
                    console.log(error)
                })
            }
        },
        mounted() {
            this.isLoggedIn = JSON.parse(this.isLoggedIn);
            console.log('Navbar component mounted.');
            console.log('isLoggedIn: ', this.isLoggedIn)
        },
        props: ['isLoggedIn', 'homeRoute', 'logoutRoute', 'loginRoute', 'registerRoute']
    }
</script>
