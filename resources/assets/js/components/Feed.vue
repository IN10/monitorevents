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
            items: [
                {
                    id: 1,
                    level: 1,
                    title: 'Error',
                    description: 'Lorem ipsum dolor sit amet',
                },
                {
                    id: 2,
                    level: 2,
                    title: 'warning',
                    description: 'Lorem ipsum dolor sit amet',
                },
                {
                    id: 3,
                    level: 3,
                    title: 'okay',
                    description: 'Lorem ipsum dolor sit amet',
                },
                {
                    id: 4,
                    level: 4,
                    title: 'info',
                    description: 'Lorem ipsum dolor sit amet',
                },
            ],
        };
    },
};
</script>
