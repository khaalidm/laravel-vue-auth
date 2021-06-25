<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                Hey I'm a User:
                <strong> {{ $auth.user().email }}</strong>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            //
        };
    },
    components: {
        //
    }
};
</script>
