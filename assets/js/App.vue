<template>
    <div>
        <h2> Hello !</h2>
        <button @click="counter++"> Click here {{counter}}</button>
    </div>
</template>

<script>
    export default {
        data: () => ({
            counter:0
        })
    }
</script>

<style>

</style>