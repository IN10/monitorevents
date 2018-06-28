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
        Echo.channel('test-channel').listen('App\\Events\\SiteEvent', (e) => {
            console.log('event', e);
        });
    },
};
</script>
