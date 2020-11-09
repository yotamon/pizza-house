<template>
    
</template>

<script>
export default {
    data() {
        return {
            pizzas: [],
            pizza: {
                name: '',
                type: '',
                base: '',
                toppings: [],
                price: 20;
            }
            pizza_id: '',
            pagination: {},
        }
    }

    created() {
        this.fetchPizzas();
    }

    methods: {
        fetchPizzas() {
            fetch()
        }
    }
}
</script>