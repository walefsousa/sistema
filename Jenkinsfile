pipeline{
   
    agent any
    stages {
        stage('Build image'){
            steps{
                scrypt {
                    dockerapp = docker.build("walef/sistema_imagem", ' -f ./dockerfile/Dockerfile ./dockerfile')        
                }
            }
        } 
    }
}