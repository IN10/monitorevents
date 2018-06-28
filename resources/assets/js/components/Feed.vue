<template>
    <div>
        <item v-for="item in items" :key="item.id" :item="item">
        </item>
    </div>
</template>

<script>
import Item from './Item';

export default {
    components: { Item },
    data() {
        return {
            items: [],
        };
    },

    mounted() {
        Echo.private('test-channel').listen('SiteEvent', event => this.items.push(event));
    },
};
</script>
