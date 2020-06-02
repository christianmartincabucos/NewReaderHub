<template>
    <header>
        <sidebar :profile="profile"></sidebar>
        <navbar :logo="logo" :profile="profile"></navbar>
    </header>
</template>
<script>
export default {
    props:['logo', 'profile']
}
</script>
