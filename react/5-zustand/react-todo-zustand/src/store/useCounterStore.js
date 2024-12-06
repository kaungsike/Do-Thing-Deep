import { create } from "zustand";

// const useCounterStore = create((set) => {
//   return {
//     count: 10,
//     increaseCount: () => {
//       return set((state) => {
//         return {
//           count: state.count + 1,
//         };
//       });
//     },
//     decreaseCount: () => {
//       return set((state) => {
//         return {
//           count: state.count - 1,
//         };
//       });
//     },
//     resetCount: () => {
//       return set({
//         count: 0,
//       });
//     },
//   };
// });

// JS ES 6

const useCounterStore = create((set) => ({
  count: 3,
  reset: () => set({ count: 0 }),
  increase: () => set((state) => ({ count: state.count + 1 })),
  decrease: () => set((state) => ({ count: state.count - 1 })),
}));

export default useCounterStore;

// import { create } from "zustand";

// const useCounterStore = create(function (set) {
//   return {
//     count: 3,
//     resetCount: function () {
//       return set({ count: 0 });
//     },
//     increaseConut: function (ammount) {
//       return set(function (state) {
//         return {
//           count: state.count + ammount,
//         };
//       });
//     },
//     decreaseCount : function (ammount) {
//       return set(function(state) {
//         return {
//           count : state.count - ammount
//         }
//       })
//     }
//   };
// });

// export default useCounterStore;
