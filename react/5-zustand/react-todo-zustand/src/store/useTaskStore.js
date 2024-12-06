import { create } from "zustand";

const useTaskStore = create((set) => ({
  tasks: [
    { id: 1, job: "Complete SAD homework", isDone: false },
    { id: 2, job: "Install php", isDone: true },
    { id: 3, job: "Sleep early", isDone: true },
    { id: 4, job: "Learn react", isDone: false },
  ],
  addTask: (newTask) => set((stake) => ({ tasks: [...stake.tasks, newTask] })),
  removeTask: (taskId) =>
    set((state) => ({ tasks: state.tasks.filter((el) => el.id !== taskId) })),
  doneTask: (taskId) =>
    set((state) => ({
      tasks: state.tasks.map((el) =>
        el.id === taskId ? { ...el, isDone: !el.isDone } : el
      ),
    })),
}));

export default useTaskStore;
