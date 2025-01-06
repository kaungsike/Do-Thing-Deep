import React from 'react'
import Header from '../components/Header'
import { Outlet } from 'react-router-dom'
import Container from '../container/Container'

const Layout = () => {
  return (
    <div className='p-5'>
      <Header />
      <section className='flex flex-col'>
          <Outlet />
      </section>
    </div>
  )
}

export default Layout