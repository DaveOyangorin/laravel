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
    

        <div class="flex pt-10 justify-content-md-center">
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                    </div><br>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlFile1"></label><br>
                            <input type="file" class="form-control-file" id="image" name="image"><br><br>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </BreezeAuthenticatedLayout>
</template>
