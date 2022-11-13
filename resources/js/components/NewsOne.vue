<template>
        <div class="card" style="margin-bottom: 20px">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 18px">{{ title }}</h5>
                <p class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ text }}</p>
                <a :href="link" class="btn btn-primary" target="_blank">Читать новость</a>
            </div>
        </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: "",
        },
        text: {
            type: String,
            default: "",
        },
        link: {
            type: String,
            default: ""
        }
    },
};
</script>

<style></style>
