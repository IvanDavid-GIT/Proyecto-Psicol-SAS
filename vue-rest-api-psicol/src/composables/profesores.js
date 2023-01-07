import { ref } from "vue"
import axios from "axios";
import { useRouter } from "vue-router";

axios.defaults.baseURL = "http://127.0.0.1:8000/api/v1/";

export default function useProfesores() {

    const profesores = ref([]);
    const profesor = ref([]);
    const errors = ref([]);
    const router = useRouter();

    const getProfesores = async () => {
        const response = await axios.get("profesores");
        profesores.value = response.data.data;
    };

    const getProfesor = async (id) => {
        const response = await axios.get("profesores/" + id);
        profesor.value = response.data.data;
    };

    const storeProfesor = async (data) => {
        try {
            await axios.post("profesores", data);
            await router.push({ name: "profesoresIndex" });
        } catch (error) {
            if (error.response.status === 422) {
                errors.value = error.response.data.errors;
            }
        }
    };

    const updateProfesor = async (id) => {
        try {
            await axios.put("profesores/" + id, profesor.value);
            await router.push({ name: "profesoresIndex" });
        } catch (error) {
            if (error.response.status === 422) {
                errors.value = error.response.data.errors;
            }
        }
    };

    const destroyProfesor = async (id) => {
        if (!window.confirm("¿Está seguro de eliminar?")) {
            return;
        }
        await axios.delete("profesores/" + id);
        await getProfesores();
    }


    return {
        profesor,
        profesores,
        getProfesor,
        getProfesores,
        storeProfesor,
        updateProfesor,
        destroyProfesor,
        errors,
    }
}