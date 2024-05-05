<template>
    <div style="position: fixed;bottom: 20px;right: 10px;z-index: 1000;" role="alert" class="alert relative border rounded-md px-5 py-4 text-white dark:border-primary mb-2"
        :class="{'bg-primary': success, 'bg-warning': !success, 'border-primary': success, 'border-warning': !success}">
        <div class="flex items-center">
            <div class="text-lg font-medium">
                <span v-if="!success">Error</span>
                <span v-if="success">Success</span>
            </div>
        </div>
        <div class="mt-3">
            {{ message }}
        </div>
    </div>
</template>

<script>
export default {
    name: 'AlertVue',
    props: ['message', 'success']
}
</script>

<style>

</style>
