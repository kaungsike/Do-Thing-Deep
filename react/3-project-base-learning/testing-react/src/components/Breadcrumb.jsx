import React from 'react'
import { Link } from 'react-router'

const Breadcrumb = ({currentPageTitle}) => {
  return (
    <div className="flex gap-3 mb-7">
    <Link to={"/"} className="text-gray-600">
      Home
    </Link>
    <p>/</p>
    <p className="font-bold">{currentPageTitle}</p>
  </div>
  )
}

export default Breadcrumb