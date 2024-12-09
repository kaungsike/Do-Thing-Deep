import { create } from "zustand";

const useCategoryStore = create((set) => ({
  categories: [
    { id: 0, name: "All", isActive: true },
    { id: 1, name: "Electronics", isActive: false },
    { id: 2, name: "Jewelery", isActive: false },
    { id: 3, name: "Men's clothing", isActive: false },
    { id: 4, name: "Women's clothing", isActive: false },
  ],
  activeCategory: (id) =>
    set((state) => ({
      categories: state.categories.map((category) =>
        category.id === id
          ? { ...category, isActive: true }
          : { ...category, isActive: false }
      ),
    })),
}));

export default useCategoryStore;
