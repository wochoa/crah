<script>
import Layout from "../../layouts/main.vue";
import PageHeader from "../../components/page-header.vue";

/**
 * Form-mask component
 */
export default {
    components: {
        Layout,
        PageHeader
    },
    data() {
        return {
            title: "Form Mask",
            items: [{
                text: "Forms",
                href: "/"
            },
            {
                text: "Form Mask",
                active: true
            }
            ],
            digit: "",
            zipcode: "",
            crazyzip: "",
            money: "",
            date: "",
            hour: "",
            datetime: "",
            ipaddress: "",
            cnpj: "",
            cpf: "",
            celphone: "",
            ustelephone: "",
            areacode: "",
            telephone: ""
        };
    }
};
</script>

<template>
    <Layout>
        <PageHeader :title="title" :items="items" />
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Example</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div>
                                            <label for="regexp-mask" class="form-label">Dynamic mask</label>
                                            <input type="text" v-maska="['# cm', '#.# cm', '#.## cm']" class="form-control"
                                                id="regexp-mask">
                                            <div class="text-muted">["# cm", "#.# cm", "#.## cm"]</div>
                                        </div>

                                        <div class="mt-4">
                                            <label for="phone-mask" class="form-label">Phone with code</label>
                                            <input type="text" v-maska="['+1 (###) ##-##-##', '+1 (###) ###-##-##']"
                                                class="form-control" id="phone-mask">
                                            <div class="text-muted">+1 (###) ###-####</div>
                                        </div>
                                        <div class="mt-4">
                                            <label for="number-mask" class="form-label">Credit card</label>
                                            <input type="text" v-maska="'#### #### #### ####'" class="form-control"
                                                id="number-mask">
                                            <div class="text-muted">#### #### #### ####</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">
                                        <div>
                                            <label for="date-mask" class="form-label">Date</label>
                                            <input type="text" v-maska="'##/##/####'" class="form-control" id="date-mask">
                                            <div class="text-muted">##/##/####</div>
                                        </div>

                                        <div class="mt-4">
                                            <label class="form-label">Hex color</label>
                                            <input type="text"
                                                v-maska="{ mask: ['!#HHHHHH', '!#HHHHHH-HH'], tokens: { 'H': { pattern: /[0-9a-fA-F]/, uppercase: true } } }"
                                                class="form-control" id="dynamic-mask">
                                            <div class="text-muted">!#HHHHHH</div>
                                        </div>
                                        <div class="mt-4">
                                            <label class="form-label">CPF/CNPJ</label>
                                            <input type="text" v-maska="['###.###.###-##', '##.###.###/####-##']"
                                                class="form-control" id="currency-mask">
                                            <div class="text-muted">["###.###.###-##", "##.###.###/####-##"]</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
