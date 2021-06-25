<template>
    <nav class="navbar navbar-light bg-light" id="nav">
        <div v-if="$auth.check()">
            <button
                class="btn btn-link"
                href="#"
                @click.prevent="$auth.logout()"
            >
                Logout
            </button>
        </div>
        <div v-else>
            <button
                class="btn btn-link"
                href="#"
                @click.prevent="$router.push('login')"
            >
                Login
            </button>
            <button
                class="btn btn-link"
                href="#"
                @click.prevent="$router.push('register')"
            >
                register
            </button>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            routes: {
                user: [
                    {
                        name: "Dashboard",
                        path: "dashboard"
                    }
                ],
                admin: [
                    {
                        name: "Dashboard",
                        path: "admin.dashboard"
                    }
                ]
            }
        };
    },
    mounted() {}
};
</script>
