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
        //Echo.channel('test-channel').listen('SiteEvent', message => this.items.push(message.event));

        socket.on("test-channel:event", message => this.items.push(message.event));
    },
};
</script>
