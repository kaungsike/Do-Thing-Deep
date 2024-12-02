import { useState } from "react";

function App() {
  const [count, setCount] = useState(0);

  return (
    <div className="w-full flex flex-col items-center mt-[200px] gap-5">
      <h1 className="text-8xl font-bold">{count}</h1>
      <div className="flex gap-5">
        <button
          onClick={() => setCount(count + 1)}
          className="border active:scale-95 duration-150 px-6 py-2 rounded  border-black"
        >
          Increasement
        </button>
        <button
          onClick={count>0 && (() => setCount(count - 1))}
          className="border px-6 py-2 rounded active:scale-95 duration-150   border-black"
        >
          Decreasement
        </button>
      </div>
    </div>
  );
}

export default App;
