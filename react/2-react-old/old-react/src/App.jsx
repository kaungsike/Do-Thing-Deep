export default function App() {
  const title = "Product Categories";

  const categories = [
    "electronics",
    "jewelery",
    "men's clothing",
    "women's clothing",
  ];
  return (
    <div>
      <p className="m-3 text-2xl ">{title}</p>
      <div>
        {categories.map((category) => (
          <button className="border border-black px-6 py-2 rounded mx-3">
            {category}
          </button>
        ))}
      </div>
    </div>
  );
}
