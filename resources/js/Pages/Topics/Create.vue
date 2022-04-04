<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Topics" />

    <BreezeAuthenticatedLayout>
    <div class="container">
        <Link
         type="button" class="btn btn-primary" href="./topics">Back
        </Link>
    </div>

    <div class="flex" style="align-items:center">
        <form>
            <div class="form-row">
                <div class="col">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
        </form>
    </div>
    </BreezeAuthenticatedLayout>
</template>
