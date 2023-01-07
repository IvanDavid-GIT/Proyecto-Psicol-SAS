import { ref } from "vue"
import axios from "axios";
import { useRouter } from "vue-router";

axios.defaults.baseURL = "http://127.0.0.1:8000/api/v1/";

export default function useEstudiantes() {

    const estudiantes = ref([]);
    const estudiante = ref([]);
    const errors = ref([]);
    const router = useRouter();

    const getEstudiantes = async () => {
        const response = await axios.get("estudiantes");
        estudiantes.value = response.data.data;
    };

    const getEstudiante = async (id) => {
        const response = await axios.get("estudiantes/" + id);
        estudiante.value = response.data.data;
    };

    const storeEstudiante = async (data) => {
        try {
            await axios.post("estudiantes", data);
            await router.push({ name: "estudiantesIndex" });
        } catch (error) {
            if (error.response.status === 422) {
                errors.value = error.response.data.errors;
            }
        }
    };

    const updateEstudiante = async (id) => {
        try {
            await axios.put("estudiantes/" + id, estudiante.value);
            await router.push({ name: "estudiantesIndex" });
        } catch (error) {
            if (error.response.status === 422) {
                errors.value = error.response.data.errors;
            }
        }
    };

    const destroyEstudiante = async (id) => {
        if (!window.confirm("¿Está seguro de eliminar?")) {
            return;
        }
        await axios.delete("estudiantes/" + id);
        await getEstudiantes();
    }


    return {
        estudiante,
        estudiantes,
        getEstudiante,
        getEstudiantes,
        storeEstudiante,
        updateEstudiante,
        destroyEstudiante,
        errors,
    }
}