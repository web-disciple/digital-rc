<template>
<div v-if="this.data === null">
    <div style="
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
      ">
        <img class="h-16" src="~/static/images/loading/loading.svg" alt="" />
    </div>
</div>
<div v-else class="lg:w-1/2 p-4 mt-24 mx-auto lg:mt-48">
    <h1 class="text-center text-lg lg:text-xl font-title font-medium mb-8">
        {{ data.titre_formulaire_de_contact }}
    </h1>
    <MainContactForm />
</div>
</template>

<script>
export default {
    head: {
        title: "Digital RC - Contact - Imprimantes professionnelles",
        meta: [{
            hid: "description",
            name: "description",
            content: "Vente ou location de photocopieurs récents de la marque RICOH avec ou sans contrat de maintenance.",
        }, ],
    },
    data() {
        return {
            data: null,
        };
    },
    async fetch() {
        this.data = await fetch(
            "https://admin.digitalrc.fr/wp-json/wp/v2/pages/6"
        ).then((res) => {
            return res.json();
        });
        this.data = this.data.acf;
    },
};
</script>
