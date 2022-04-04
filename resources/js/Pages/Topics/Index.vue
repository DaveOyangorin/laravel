<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Topics" />

    <BreezeAuthenticatedLayout>
    <div class="container">
        <Link
         type="button" class="btn btn-primary" href="./create">Create
        </Link>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            
            
            </tbody>
        </table>
    </div>
    </BreezeAuthenticatedLayout>
</template>
