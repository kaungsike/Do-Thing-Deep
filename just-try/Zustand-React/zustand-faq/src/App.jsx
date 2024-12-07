import React from 'react'
import Header from './components/Header'
import FaqGroup from './components/FaqGroup'

const App = () => {
  return (
    <div className='w-[700px] border border-black rounded p-5 mx-auto mt-[150px]'>
      <Header/>
      <FaqGroup/>
    </div>
  )
}

export default App