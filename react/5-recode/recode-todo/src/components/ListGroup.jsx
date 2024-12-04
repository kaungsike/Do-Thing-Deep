import React, { useContext } from 'react'
import List from './List'
import Context from '../context/Context'

const ListGroup = () => {

    const {notes} = useContext(Context)

  return (
    <div className='mt-4'>
        <div className='flex justify-end'>
            <p>( {notes.filter((el) => el.isDone==true).length} Done / {notes.length} Total )</p>
        </div>
        <div className='flex flex-col gap-1 mt-3 mb-6'>   
        {
            notes.map((el) => (
                <List key={el.id} note={el}/>
            ))
        }
        </div>
    </div>
  )
}

export default ListGroup