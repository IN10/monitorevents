<template>
    <div class="card mb-3" :class="color">
        <div class="card-header">{{ item.title }}</div>
        <div class="card-body">
            <p class="card-text">{{ item.description }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: ['item'],

    computed: {
        color() {
            if (this.item.level === 1) {
                return 'bg-danger text-white';
            }
            if (this.item.level === 2) {
                return 'bg-warning text-white';
            }
            if (this.item.level === 3) {
                return 'bg-success text-white';
            }
            return 'bg-informational';
        },
    },
};
</script>
