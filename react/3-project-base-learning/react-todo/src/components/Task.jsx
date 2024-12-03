import React from 'react'

const Task = ({task,removeTask}) => {

  const handleDelete = () => {
    if(confirm("Are you sure to delete?")){
      removeTask(task)
    }
  }

  return (
    <div className='border border-black p-2.5 flex rounded items-center justify-between'>
      <p>{task}</p>
      <div>
        <button onClick={handleDelete} className='border text-sm border-red-500 bg-red-500 text-white px-2 rounded py-1'>Delete</button>
      </div>
    </div>
  )
}

export default Task