import { create } from "zustand";

const useNoteStore = create((set) => ({
  notes: [
    {
      id: 1,
      title: "My note",
      about:
        "Browse and customize beautiful Tailwind CSS buttons in various styles, states, and sizes. Find active, disabled, pill, icon, and other free button examples.",
    },
    {
      id: 2,
      title: "My note",
      about:
        "Browse and customize beautiful Tailwind CSS buttons in various styles, states, and sizes. Find active, disabled, pill, icon, and other free button examples.",
    },
  ],
  editTitle: (id, newTitle) =>
    set((state) => ({
      notes: state.notes.map((note) =>
        note.id === id ? { ...note, title: newTitle } : note
      ),
    })),
}));

export default useNoteStore;
