import { create } from "zustand";

const useCategoryStore = create((set) => ({
  categories: [
    { id: 0, name: "all", isActive: true },
    { id: 1, name: "electronics", isActive: false },
    { id: 2, name: "jewelery", isActive: false },
    { id: 3, name: "men's clothing", isActive: false },
    { id: 4, name: "women's clothing", isActive: false },
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
