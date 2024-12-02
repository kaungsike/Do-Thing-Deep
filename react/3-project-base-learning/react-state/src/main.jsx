import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import ShowMyName from './ShowMyName.jsx'
import Faq from './FaqSection.jsx'
import FaqSection from './FaqSection.jsx'


createRoot(document.getElementById('root')).render(
  <StrictMode>
    <FaqSection/>
  </StrictMode>,
)


