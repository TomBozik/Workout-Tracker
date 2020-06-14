<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 px-4">
              
                <div class="row">
                    <h3>{{exercise.name}}</h3>
                </div>

                <div v-if="errors">
                    <div v-for="(v, k) in errors" :key="k">
                        <p v-for="error in v" :key="error">
                        {{ error }}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <span>Reps:</span>
                    <input v-model="reps" required>
                </div>

                <div class="row">
                    <span>Weight:</span>
                    <input v-model="weight" required>
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary" @click="createSet">Create Set</button>
                </div>

                <img :src="'/storage/'+  exercise.image"/>
            
            </div>
        </div>

        <div class="row justify-content-center pt-5">
            <div class="col-lg-8 col-sm-12">
                <table class="table">
                    <tr style="background-color: #F7F7F7">
                        <th class="text-center">Reps</th>
                        <th class="text-center">Weight</th>
                        <th class="text-center">Date</th>
                    </tr>

                    <tr v-for="set in sets" :key="set.id">
                        <td class="text-center">{{ set.reps }}</td>
                        <td class="text-center">{{ set.weight }}</td>
                        <td class="text-center">{{ set.created_at }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    props: ["data", "exercise"],

    data() {
        return {
            reps: "",
            weight: "",
            sets: this.data,
            errors: null,
        };
    },

    methods:{
        createSet(){
            axios.post('/sets',{
                'reps': this.reps,
                'weight': this.weight,
                'exerciseId': this.exercise.id,
                })
                .then(response => {
                    this.sets = response.data;
                })
                .catch( e => {
                    this.errors = e.response.data.errors;
                    console.log(this.errors);
                });
        }
    },

};
</script>
