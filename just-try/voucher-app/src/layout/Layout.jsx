import React from 'react'
import Header from '../components/Header'
import { Outlet } from 'react-router-dom'

const Layout = () => {
  return (
    <>
    <Header/>
    <section className=''>
        <Outlet/>
    </section>
    </>
  )
}

export default Layout