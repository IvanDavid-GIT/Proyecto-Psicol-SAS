import { ref } from "vue"
import axios from "axios";
import { useRouter } from "vue-router";

axios.defaults.baseURL = "http://127.0.0.1:8000/api/v1/";

export default function useAsignaturas() {

    const asignaturas = ref([]);
    const asignatura = ref([]);
    const errors = ref([]);
    const router = useRouter();

    const getAsignaturas = async () => {
        const response = await axios.get("asignaturas");
        asignaturas.value = response.data.data;
    };

    const getAsignatura = async (id) => {
        const response = await axios.get("asignatura/" + id);
        asignatura.value = response.data.data;
    };

    const storeAsignatura = async (data) => {
        try {
            await axios.post("asignaturas", data);
            await router.push({ name: "asignaturasIndex" });
        } catch (error) {
            if (error.response.status === 422) {
                errors.value = error.response.data.errors;
            }
        }
    };

    const updateAsignatura = async (id) => {
        try {
            await axios.put("asginaturas/" + id, asignatura.value);
            await router.push({ name: "asignaturasIndex" });
        } catch (error) {
            if (error.response.status === 422) {
                errors.value = error.response.data.errors;
            }
        }
    };

    const destroyAsignatura = async (id) => {
        if (!window.confirm("¿Está seguro de eliminar?")) {
            return;
        }
        await axios.delete("asignaturas/" + id);
        await getAsignaturas();
    }


    return {
        asignatura,
        asignaturas,
        getAsignatura,
        getAsignaturas,
        storeAsignatura,
        updateAsignatura,
        destroyAsignatura,
        errors,
    }
}