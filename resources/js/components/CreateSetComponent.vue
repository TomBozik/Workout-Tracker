<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 px-4">
              
                <div class="row">
                    <div class="col">
                        <h3>{{exercise.name}}</h3>
                    </div>
                </div>

                <div v-if="errors">
                    <div v-for="(v, k) in errors" :key="k">
                        <p v-for="error in v" :key="error">
                        {{ error }}
                        </p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label for="reps">Reps</label>
                            <input type="text" class="form-control" v-model="reps" required>
                        </div>
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="text" class="form-control" v-model="weight" required>
                        </div>
                        <button class="btn btn-primary" @click="createSet">Create Set</button>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <img v-if="exercise.image_thumbnail" :src="'/storage/'+  exercise.image" style="max-width:100%;" />
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center pt-5">
            <div class="col-lg-8 col-sm-12">
                <table class="table table-bordered">
                    <tr style="background-color: #F7F7F7">
                        <th class="text-center">Reps</th>
                        <th class="text-center">Weight</th>
                        <th class="text-center">Date</th>
                    </tr>

                    <tr v-for="set in sets" :key="set.id">
                        <td class="text-center">{{ set.reps }}</td>
                        <td class="text-center">{{ set.weight }}</td>
                        <td class="text-center">{{ set.created_at | formatDate }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row justify-content-center pt-5">
            <div class="col-lg-8 col-sm-12">
                <chart v-if="loaded" :chartData="chartData"> </chart>
            </div>
        </div>

    </div>
</template>

<script>
import moment from 'moment';
import SetChart from './SetChart'


export default {
    props: ["data", "exercise"],
    components: {
        'chart': SetChart
    },
    data() {
        return {
            loaded:false,
            reps: "",
            weight: "",
            sets: this.data,
            errors: null,
            chartData: null,
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
                    this.updateProp();
                })
                .catch( e => {
                    this.errors = e.response.data.errors;
                });
        },
        // TODO: optimize
        updateProp(){
            let newData = [];
            let newLabels = [];

            newData = this.sets.map(set => set.weight).reverse(); // TODO
            newLabels = this.sets.map(set => moment(String(set.created_at)).format('DD.MM.YY')).reverse(); // TODO

            this.chartData ={
                labels: newLabels,
                datasets: [
                    {
                        label: "Weight",
                        // backgroundColor: "#f87979",
                        borderColor: "#184cef",
                        color: "#184cef",
                        data: newData
                    }
                ]
            };
            this.loaded = true;
        },
    },
    mounted(){
        this.updateProp();
    },

};

Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).format('DD.MM.YYYY hh:mm')
    }
});
</script>
