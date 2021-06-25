<template>
    <div id="main">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>
                            Laravel And Vue Auth
                        </h1>
                    </div>
                    <div class="col-sm-4">
                        <navigationMenu></navigationMenu>
                    </div>
                </div>
            </div>
        </header>
        <div id="content">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
import navigationMenu from "./components/Menu.vue";
export default {
    data() {
        return {
            //
        };
    },
    components: {
        navigationMenu
    }
};
</script>
