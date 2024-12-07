import { create } from "zustand";

const useListStore = create((set) => ({
  lists: [
    {
      id: 1,
      job: "Read DOC",
      isDone: false,
    },
    {
      id: 2,
      job: "Code All Days",
      isDone: true,
    },
    {
      id: 3,
      job: "Stay Heard",
      isDone: true,
    },
  ],
  deleteList: (id) =>
    set((state) => ({
      lists: state.lists.filter((list) => list.id !== id),
    })),
  checkList: (id) =>
    set((state) => ({
      lists: state.lists.map((list) =>
        list.id == id ? { ...list, isDone: !list.isDone } : list
      ),
    })),
  createList: (newList) =>
    set((state) => ({
      lists: [ ...state.lists, newList ],
    })),
}));

export default useListStore;
