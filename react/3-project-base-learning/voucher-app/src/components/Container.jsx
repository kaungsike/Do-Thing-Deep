import React from 'react'

const Container = ({children,className}) => {
  return (
    <div className={`max-w-[1400px] mx-auto ${className} p-5`}>
        {children}
    </div>
  )
}

export default Container