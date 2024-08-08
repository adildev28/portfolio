
import { BallCanvas } from "./canvas"
import { SectionWrapper } from "../hoc"
import { motion} from "framer-motion";
import { styles } from "../styles";
import {textVariant} from '../utils/motion';
import { technologies } from "../constants"

const Tech = () => {
  return (
    <>
      <motion.div variants={textVariant()} 
      className="mb-16">
        <p className={`${styles.sectionSubText}`}>Quelles technologies je maîtrise</p>
        <h2 className={`${styles.sectionHeadText}`}>Technologies .</h2>
      </motion.div>
    <div
    className="flex flex-row flex-wrap justify-center gap-10"
    >
      {technologies.map((technology)=>(
        <div className="w-28 h-28" key={technology.name}>
          <BallCanvas icon={technology.icon} />
        </div>
      ))}


    </div>
    </> 
     )
}

// export default Tech 
export default SectionWrapper(Tech,"tech")