import React from 'react'
import useListStore from '../store/useListStore'
import List from '../components/List.jsx'

const listGroup = () => {

  const {lists} = useListStore();

  return (
    <div>
      <div className='flex mb-4 items-center justify-between'>
        <p>Lists</p>
        <p>( {(lists.filter(list => list.isDone==true).length)} Done / {lists.length} Total )</p>
      </div>
      <div className='flex flex-col gap-2'>
        {
          lists.map(list => (
            <List key={list.id} list={list}/>
          ))
        }
      </div>
    </div>
  )
}

export default listGroup