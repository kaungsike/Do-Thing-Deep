import React from 'react'
import Header from './Header'
import { Outlet } from 'react-router'

const Layout = () => {
  return (
    <main className='min-h-screen bg-gray-100 flex-col'>
      <Header/>
      <section>
        <Outlet/>
      </section>
    </main>
  )
}

export default Layout