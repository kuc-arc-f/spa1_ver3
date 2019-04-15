<template>
    <nav class="navbar navbar-default">
        <ul>
            <li>
                <router-link  to="/">Home</router-link>
            </li>
            <li>
                <router-link  to="/about">About</router-link>
            </li>
            <li>
                <a href="#" v-on:click="logout">Logout</a>
            </li>
            <li>
                <router-link  to="/users/login">Login</router-link>
            </li>
            <li>
                <router-link  to="/tasks">Task</router-link>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        created() {
        },
        data() {
            return {
                tasks: [],
                user : '',
                store:[]
            }
        },
        methods: {
            logout() {
                console.log('#logout')
                myStorage.remove()
                window.location.href='/users/login'
            }            
        }
    }
</script>